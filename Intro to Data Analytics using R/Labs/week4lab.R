#install.packages("aod")
#library(aod)

mydata <- read.csv("https://stats.idre.ucla.edu/stat/data/binary.csv")
head(mydata)

summary(mydata)
View(mydata)

dim(mydata)

sapply(mydata,sd)[-4]
sapply(mydata,mean)[-4]

levels(mydata$rank)
mydata$rank<-factor(mydata$rank, levels=c(1,2,3,4))

contrasts(mydata$rank)
levels(mydata$rank)

m<-glm(admit~gre+gpa+rank, data=mydata, family=binomial)

summary(m)

#rank3 and rank4 statistically significant

admit.prob<-predict(
  m,
  #newdata=data.frame(gre=mydata$gre,gpa=mydata$gpa,rank2=ifelse(mydata$rank==2,1,0),rank3=ifelse(mydata$rank==3,1,0),rank4=ifelse(mydata$rank==4,1,0)),
  type="response"
                    )
length(admit.prob)

admit.pred=rep(0,400)

admit.pred[admit.prob>=0.5]=1

admit.pred

table(Pred=admit.pred, Actual=mydata$admit)
mean(mydata$admit==admit.pred)

View()

mydata1 <- read.csv("https://stats.idre.ucla.edu/stat/data/binary.csv")

r1=sapply(subset(mydata1,rank==1), mean)[-4]


#df<-data.frame( gre=r1["gre"], gpa=r1["gpa"],rank=factor(1:4))
df<-data.frame( gre=mean(mydata$gre),gpa= mean(mydata$gpa),rank=factor(1:4))

df

df$admit.pred<-predict(m,
        newdata=df,
        type="response")

df$admit.pred[df$admit.pred>0.2]

train<-(mydata$rank<1)
train


mydata[]



