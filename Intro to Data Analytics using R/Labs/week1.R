
help("c")

x=c(1,2,3)
x

y=1:9
y

z=seq(1,9)
z

a=seq(from=0,to=200,length=10)
a

i=seq(0,2,by=0.3)
length(i)

a=1:5
b=6:10
#c=a+b
c=a*b
c

length(b)

q()

help("seq")

??R

shell("cls")


rm(list=ls())


help("rm")



#####################EXERCISES#################################




x=seq(from=5.3,to=8.0,length=10)
x

y=seq(from=3.5,to=7.9,by=0.4)
y

x+y #errror because lengths not multiple of eachother

length(x)
length(y)

rm(list=ls())

x=1+x



############################matrixes##################################

m=matrix(data=c(1,2,3,4),nrow=2,ncol=2,byrow=TRUE)
m

dim(m)

m[-1,-2]


B=matrix(seq(1,39,by=2),4,5,byrow=TRUE)
B

B[-c(1,3),-c(1,4,5)]
B[c(2,4),c(2,3)]

C=matrix(c(1,1,2,3,5,8,13,21,34),3,3)
C


fab=function(n)
{
    x=numeric(n)
    x[1:2]=c(1,1)
    
    for(i in 3:n)
      x[i]=x[i-1]+x[i-2]
  return(x)
}

#rm(list=ls())

C=matrix(fab(9),3,3)
C




avg=function(l)
{
    sum=0
    for(i in 1:length(l))
        sum=sum+l[i]
        
        return (sum/length(l))
}



avg(0:100)

C[1,1]
C[1:2,1:1]
C[-3,-c(2:3)]
C[,1]
C[1:3,-c(2,3)]

#################################################TEST######################

rm(list=ls())



x=numeric(3)
x[1]=3
x

help("numeric")

matrix(1:9,3,3,dimnames = list(c("a","b","c"),c("e","f","g")))