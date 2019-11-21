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

     


class Queue:
    def __init__(self):
        self.In=Stack()
        self.Out=Stack()

        self.x=0

    def enq(self,x):
        self.In.push(x)

    def dq(self):

        while(self.In.isEmpty()==False):
            self.Out.push(self.In.pop())

        self.x=self.Out.pop()

        while(self.Out.isEmpty()==False):
            self.In.push(self.Out.pop())

        return self.x




q1=Queue()

q1.enq(1)
q1.enq(2)
q1.enq(3)

print(q1.dq())
print(q1.dq())
