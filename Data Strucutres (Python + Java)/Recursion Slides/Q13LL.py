class queue:
    def __init__(self):
        self.items=[]

    def enq(self,x):
        self.items.insert(0,x)

    def dq(self):
        return self.items.pop()
    def isEmpty(self):
        return len(self.items)==0
    def readFirst(self):
        return self.items[len(self.items)-1]

    
def smallest(q):
    x=q.dq()
    if(q.isEmpty()):
        return x

    y=q.dq()

    if(q.isEmpty()):
        return min(x,y)

    return min(x,y, smallest(q))

def sumConsQ(q):
    x=q.dq()
    if(q.isEmpty()):
        return 0
    
    y=q.readFirst()

    if(q.isEmpty()):
        return x+y
    else:
        return x+y+sumConsQ(q)


    
p = queue()

p.enq(1)
p.enq(2)
p.enq(3)
p.enq(4)

print(sumConsQ(p))
