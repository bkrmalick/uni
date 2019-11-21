library(ISLR)


library(boot)

error=matrix(nrow=10,ncol=2,data=rep(0,20))

for(i in 1:10)
{
  m<-glm(mpg~poly(horsepower,i), data=Auto)
  error[i,]=cv.glm(Auto,m)$delta
}
error


plot(error[,2], xlab="degree", ylab="Mean Squard Error", type="b", main="LOOCV", ylim=c(15,28), col="blue", lwd=3)


##K-fold
palette(rainbow(10))
set.seed(1)

error2=rep(0,10)
for(i in 1:10)
{
  m2<-glm(mpg~poly(horsepower,i), data=Auto)
  error2[i]<-(cv.glm(Auto,m2,K=10)$delta)[1]
}

error2

plot(error2, ylab="Mean Squared Error", main="10-fold Cross Validation", xlab="Degree", lwd=3, col=1,type="b", ylim=c(16,28) )




error3=matrix(nrow=9, ncol=10, data=rep(0,90))
for(j in 2:10)
{
  set.seed(j)
  
  for(i in 1:10)
  {
    
    m2<-glm(mpg~poly(horsepower,i), data=Auto)
    error3[j,i]=(cv.glm(Auto,m2,K=10)$delta)[1]
    
    
  }
  lines(error3[j,], col=j, type="l",lwd=3 )
}

legend("topright",legend=c("1","2","3","4","5","6","7","8","9","10"),col=1:10,lty=1)
