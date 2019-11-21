class stack:
    def __init__(self):
        self.items=[]
    def push(self, item):
        self.items.append(item)
    def pop(self):
        if(len(self.items)>0):
            return self.items.pop()
        else:
            return False
    def print(self):
        for i in range(len(self.items)-1,-1,-1):
            print(self.items[i])
    def ReadFirst(self):
        if(len(self.items)>0):
            return self.items[len(self.items)-1]
        else:
            return False
    def isEmpty(self):
        if(len(self.items)>0):
            return False
        else:
            return True

def smallestS(s):
    x=s.pop()
    if(s.isEmpty()==False):
        return min(x, smallestS(s))
    else:
        return x
    
def sumConsS(s):
    if(s.isEmpty()):
        return 0
    
    x=s.pop()
    if(s.isEmpty()==False):
        y=s.ReadFirst()
        return x+y+sumConsS(s)
    else:
        return 0
    
    
    

s=stack()

s.push(1)
s.push(2)
s.push(3)
s.push(2)



print(sumConsS(s))
