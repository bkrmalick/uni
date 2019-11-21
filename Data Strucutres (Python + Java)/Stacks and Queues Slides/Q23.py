class Stack:
     def __init__(self):
         self.items = []

     def isEmpty(self):
         return self.items == []

     def push(self, item):
         self.items.append(item)

     def pop(self):
         return self.items.pop()

     def print(self):
         for i in range(len(self.items)-1,-1,-1):
             print(self.items[i])

     


s1=Stack()
s2=[]
s3=Stack()
s1.push(1)
s1.push(2)
s1.push(3)
s1.push(-4)

s2.append(s1.pop())
mini=s2[0]
c=0
i=c

while(s1.isEmpty()==False):

    x=s1.pop()
    if(x<mini):
        mini=x
        i=c

    s2.append(x)
    c=c+1

for i in range(len(s2)-1,-1,-1):
    s3.push(s2[i])

print("The min of stack is:",mini)
s1=s3

s1.print()

