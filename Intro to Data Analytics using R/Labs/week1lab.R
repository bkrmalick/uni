rm(list=ls())


#Q1
u=seq(-10,0)
u=-10:0
u

#Q2
v=seq(-0.1,by=0.5,length=11)
v=seq(-0.1,4.9,length=11)
v

#Q3
u+v
u*v

#Q4
u=u+1
v=0.8*v

#Q5
w=c(u,v)
w

len=length(w)
len

#Q6
w[14:16]
w[c(2,5,9)]
w[23]

#Q7
w[3]=100
w[c(7,15,22)]=c(200,300,400)
w

#Q8
rm(u)

#Q9
rm(list=ls())


#Q10
help("exp")

exp(1)
cos(90)

p=seq(3,6,by=0.1)
p=exp(p)*cos(p)
p

p1=exp(seq(3,6,by=0.1))*cos(seq(3,6,by=0.1))
p1


#Q11
max(p)
p
which(p==max(p))
which(p==min(p))

#Q12
sort(p, decreasing=TRUE)

#Q13
rep(c(4,6,3),10)
length(which(rep(c(4,6,3),10)==4))

#Q14
c(rep(4,10),rep(6,20),rep(3,30))

##############################################-MATRICES-##############################################


#Q1
b_matrix=matrix(
  seq(1,39,by=2),
  4,
  5,
  byrow=TRUE,
  dimnames = list(
                  c("A","B","C","D"),
                  c("a","b","c","d","e")
                  )
   )

b_matrix

#Q2
subB=b_matrix[c("A","B","D"),c("b","c")]
b_matrix[-3,-c(1,4,5)]


#Q3
a_matrix=matrix(
  1:12,
  4,
  3,
  dimnames=
    list(
      c("one","two","three","four"),
      c("eins","zwei","drei")
    )
)
a_matrix

#Q3
a_matrix %*% b_matrix
a_matrix %*% subB


#Q4
x=1:3
y=4:6
z=7:9
rbind(a=(cbind(x,y,z))[1,], b=(cbind(x,y,z))[2,],c=(cbind(x,y,z))[3,])