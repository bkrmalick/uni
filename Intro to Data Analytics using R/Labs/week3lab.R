x<-c(3.4,1.8,4.6,2.3,3.1,5.5,.7,3.0,2.6,4.3,2.1,1.1,6.1,4.8,3.8)
y<-c(26.2,17.8,31.3,23.1,27.5,36,14.1,22.3,19.6,31.3,24,17.3,43.2,36.4,26.1)

firedam<-data.frame(x,y)

plot(x,y, ylab="damage(y)", xlab="distance(x)", )#ylim=c(0,20))
?plot

lm.fit<-lm(y~x,data=firedam)

lm.fit
summary(lm.fit)

#y=10.2779+4.9193x #error not included in squares model

abline(lm.fit)

