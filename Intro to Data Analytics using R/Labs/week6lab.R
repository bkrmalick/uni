install.packages("readr")
install.packages("dplyr")


library(readr)
library(dplyr)
titanic3 <- "https://goo.gl/At238b" %>%
  read_csv %>% # read in the data
  select(survived, embarked, sex, sibsp, parch, fare) %>%
  mutate(embarked = factor(embarked), sex = factor(sex)) #%>% head


titanic3 %>% head

titanic3$survived = factor(titanic3$survived)

contrasts(titanic3$survived)
levels(titanic3$survived)

install.packages("tree")
library(tree)
t<-tree(survived~.,titanic3)
summary(t)
plot(t)
text(t,pretty=0)


set.seed(7)
train<-sample(nrow(titanic3),nrow(titanic3)/2)
test<-titanic3[-train,]


t2<-tree(survived~.,data=titanic3,subset=train)
plot(t2)
text(t2, pretty=0)
pred2<-predict(t2,newdata=test,type="class")
cm2<-table(pred2,test$survived)

mean(pred2!=test$survived)


set.seed(2)
cv.tree(t2, FUN=prune.misclass)
t2_pruned<-prune.misclass(t2, best=3)
summary(t2_pruned)
plot(t2_pruned)
text(t2_pruned,pretty=0)


pred2_pruned<-predict(t2_pruned,type="class",newdata=test)

mean(pred2_pruned!=test$survived)