train<-read.table("C:/Users/Bkr/Google Drive/Year 3/Data Analytics/R/Labs/Iris_training.txt", header=TRUE, sep=",")
test<-read.table("C:/Users/Bkr/Google Drive/Year 3/Data Analytics/R/Labs/Iris_testing.txt", header=TRUE,sep=",")

train


m<-glm(species~sepal.length+sepal.width+petal.length+petal.width,data=train,family="binomial")

summary(m)

prob<-predict(m,type="response", newdata=test)
prob

pred=rep(0,20)
pred[prob>0.5]=1

cm=data.frame(table(pred=pred,actual=test$species))
CorrectPred=sum(subset(cm, subset=(pred==actual))$Freq)
TotalPred=length(pred)

accuracy=CorrectPred/TotalPred * 100
print(paste("accuracy: ",accuracy,"%"))


##ROC graph

install.packages("ROCR")
library(ROCR)

pred1<-prediction(prob,test$species)
auroc<-performance(pred1,measure="auc")
auroc@y.values[[1]]
perf<-performance(pred1,measure="tpr",x.measure="fpr")

plot(perf, colorize=TRUE)
abline(0,1)