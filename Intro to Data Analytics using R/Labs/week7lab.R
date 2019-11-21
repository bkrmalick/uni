library(dplyr)
titanic3 <- read.csv("C://Users//Bkr//Google Drive//Year 3//Data Analytics//R//Labs//titanic3.csv")

titanic3 <- select(titanic3,-name, -ticket, -boat, -body, -home.dest, -cabin) %>%
  mutate(embarked = factor(embarked),
         sex = factor(sex),
         pclass=factor(pclass))
summary(titanic3)


titanic3$survived01=factor(titanic3$survived)


library(randomForest)
titanic3<-na.omit(titanic3)

set.seed(1)
train<-sample(nrow(titanic3),nrow(titanic3)*0.5)

trainD<-titanic3[train,]
testD<-titanic3[-train,]

set.seed(6)
baggedR<-randomForest(survived~.-survived-survived01,data=titanic3,subset=train,mtry=7, importance=TRUE)
#rm(bagged)

predictR<-predict(baggedR, newdata=testD)
predictR<-ifelse(predictR<=0.5,0,1)

mean(predictR!=testD$survived) #0.2237094




baggedC<-randomForest(survived01~.-survived-survived01,data=titanic3,subset=train,mtry=7,importance=TRUE)
baggedC
#Number of trees: 500
#OOB estimate of  error rate: 24.71%

predictC<-predict(baggedC, newdata=testD,type="class")


mean(predictC!=testD$survived01)#0.2370937

importance(baggedR)

varImpPlot(baggedR)
varImpPlot(baggedC)

barplot(sort(importance(baggedR)[,1],decreasing=TRUE), cex.names=.7,horiz=TRUE,las=1,main="Bagged Regression (survived)")
barplot(sort(importance(baggedC)[,1],decreasing=TRUE), cex.names=.7,horiz=TRUE,las=1,main="Bagged Classification (survived01)")


## FACTOR RESPONSE VAR (MAJORITY VOTE)

x_train<-trainD[,-c(2,9)]
y_train<-trainD[,9]

x_test<-testD[,-c(2,9)]
y_test<-testD[,9]

set.seed(2)
mv<-randomForest(xtest = x_test,ytest=y_test,x = x_train,y=y_train,mtry=7,importance=TRUE)
mv$test$err.rate
mv$test$votes


plot(1:500,mv$test$err.rate[,1],type="l", xlab="No. Of Trees",ylab="Error",main="Error against Trees",col="Black",xlim=c(0,200))
abline(mv$test$err.rate[1,1],0,lty=2, col="red")

## Continuous Response Var (AVERAGING PRED. Value) 

err=matrix(nrow = 500,ncol=1)
for(i in 1:200)
{
  set.seed(2)
  mv<-randomForest(survived~.-survived01,data=titanic3,subset=train,mtry=7,ntree=i, importance=TRUE)
  pred<-predict(mv,newdata=testD)
  pred_class<-ifelse(pred<0.5,0,1)
  
  err[i]=mean(pred_class!=y_test)
}

points(1:500,err,type="l",col="Blue")
legend("topright",lty=c(1,1,2),col=c("Black","Blue","Red"), legend=c("Majority Vote","Averaging","Single Tree"))


err=matrix(nrow=7,ncol=1)

color=rainbow(7)

mv<-randomForest(xtest = x_test,ytest=y_test,x = x_train,y=y_train,mtry=1,importance=TRUE)
plot(mv$test$err.rate[,1],xlab="No. Of Trees",ylab="Test Error Rate",type="l",ylim=c(0.16,0.3),col=color[1])

for(i in 2:7)
{
  set.seed(3)
  mv<-randomForest(xtest = x_test,ytest=y_test,x = x_train,y=y_train,mtry=i,importance=TRUE)
  points(mv$test$err.rate[,1],type="l",col=color[i])
}

legend(title="mtry","topright",col=color[1:7],legend=c(1:7),lty=1)




for(t in 1:499)
{
  err=matrix(nrow=7,ncol=1)
  
  for(i in 1:7)
  {
    set.seed(3)
    mv<-randomForest(xtest = x_test,ytest=y_test,x = x_train,y=y_train,mtry=i,ntree=t,importance=TRUE)
    err[i]=mv$test$err.rate[t,1]
  }
  points(t,err,type="l",col=color[t])
}


