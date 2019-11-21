
x<-c(3.4,1.8,4.6,2.3,3.1,5.5,0.7,3,2.6,4.3,2.1,1.1,6.1,4.8,3.8)
y<-c(26.2,17.8,31.3,23.1,27.5,36,14.1,22.3,19.6,31.3,24,17.3,43.2,36.4,26.1)

firedam <- data.frame(x,y)
m <- lm(y~x, data=firedam)

m
summary(m)

plot(x,y, ylab="Damage (thousand dollars)", xlab="Distance (mile)", main="FIREDAM", ylim=c(10,50))
plot(firedam$x, firedam$y)
abline(m)

#B1: for each mile increase in the distance(x), the damage(y) increases by $4,919
#B0: Even if firestation is 0 miles away - it will cause ~$10,278 in damage costs


#RSE=2.316  : each predicted costs in damage (y) could be off by $2,316
#R2 =0.9235 : model explains 92.35% variances in the observations

names(m)
summary(m)

sort(x)

#B1 = 4.9193, SE(B1)=0.3927, t-value= 12.525, p-value=6.59x10^-6
#B1 is approx. 12 Standard deviations away from zero and p value <0.05 so null hypothesis can be rejected


xn <- c(0.5,1.5,2.5,3.5)
predict(m, newdata=data.frame(x=xn))


predict(m, newdata=data.frame(x=c(0.5,3,5.5)), interval = "confidence")
predict(m, newdata=data.frame(x=c(0.5,3,5.5)), interval = "prediction")


#confidence interval for an x is an estimate interval of y in which the mean predicted y would lie with certain prob., 
#given what has been observed. Since this is a mean, the interval is smaller.

#prediction interval for an x is an estimate interval of y in which the predicted y would lie with certain prob. ,
#given what has already been observed. Since this is a for an individual, the interval is larger




lwC=predict(m, newdata=data.frame(x=c(0.5,3,5.5)), interval = "confidence")[,"lwr"]
uprC=predict(m, newdata=data.frame(x=c(0.5,3,5.5)), interval = "confidence")[,"upr"]

lines(c(0.5,3,5.5),lwC, pch="+", type="b", col="blue" )
lines(c(0.5,3,5.5),uprC, pch="+", type="b", col="blue" )

lwP=predict(m, newdata=data.frame(x=c(0.5,3,5.5)), interval = "prediction")[,"lwr"]
uprP=predict(m, newdata=data.frame(x=c(0.5,3,5.5)), interval = "prediction")[,"upr"]

points(c(0.5,3,5.5),lwP,pch="*",type="b",col="green")
points(c(0.5,3,5.5),uprP,pch="*",type="b",col="green")

legend("topright", pch=c("*","+"),col=c("green","blue"),legend=c("prediction","confidence"))