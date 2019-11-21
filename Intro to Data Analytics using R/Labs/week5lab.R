install.packages("ISLR")
library(ISLR)

View(Auto)

set.seed(100)
train=sample(392,196)
print(train)


m<-lm(mpg~horsepower, data=Auto, subset=train)
summary(m)

est=predict(m, newdata=Auto[-train,])

mseVSA=mean((Auto$mpg[-train]-est)^2)
mseVSA #Linear Model MSE: 24.56528





m2<-lm(mpg~poly(horsepower,2), data=Auto[train,])
m3<-lm(mpg~poly(horsepower,3), data=Auto[train,])

mean((Auto$mpg[-train]-predict(m2, newdata=Auto[-train,]))^2) #Quadratic Model MSE:  19.29895
mean((Auto$mpg[-train]-predict(m3, newdata=Auto[-train,]))^2) #Cubic Model MSE: 19.29031




#error[i,d]=mean((Auto$mpg[-train1]-
 #                  predict(    lm(mpg~poly(horsepower,d),data=Auto,subset=train1) , newdata=Auto$horsepower[-train1]))^2)



error=matrix(data = rep(0,100),10,10)



for(i in 1:10)
{
  set.seed(i*100)
  train1=sample(392,196)
  
  for(d in 1:10)
  {
    m1<-lm(mpg~poly(horsepower,d), data=Auto, subset=train1)
    est1=predict(m1,newdata=Auto[-train1,])
    actual1=Auto$mpg[-train1]
    error[i,d]=mean((est1-actual1)^2)
  }
}

max(error)
min(error)

palette(rainbow(10))

plot(1:10,error[1,],xlab="Degree of Polynomial", ylab="MSE", type="b", col=1, ylim=c(15,30))


for(i in 2:9)
{
  points(1:10, error[i,], type="b", col=i)
  
}
legend("topright",c("1","2","3","4","5","6","7","8","9","10"),lty=rep(1,10),col=1:10)
