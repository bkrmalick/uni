class node:
    def __init__(self,x,left=None,right=None):
        self.left=left
        self.right=right
        self.content=x

def findDiffs(n,diffs,x):
    if(n==None):
        return
    
    diffs.append(abs(n.content-x))

    if(n.content<x):
        findDiffs(n.right,diffs,x)
    else:
        findDiffs(n.left,diffs,x)

def SmallestDiffEl(n,minDiff):
    if(abs(n.content-x)==minDiff):
        return n.content
    else:
        if(n.content<x):
            return SmallestDiffEl(n.right, minDiff)
        else:
            return SmallestDiffEl(n.left, minDiff)
            

def BSTA(n,x): #O(d)

    diffs=[]

    findDiffs(n,diffs,x) #finding absolute differences between x and nodes throughout specific branch - O(d)
    minDiff=min(diffs) #finding least absolute difference between x and nodes - O(d)

    return SmallestDiffEl(n,minDiff) #finding and returning node with smallest absolute difference - O(d)
        


n4=node(4)
n7=node(7)
n13=node(13)
n14=node(14,n13)
n10=node(10,None,n14)
n6=node(6,n4,n7)
n1=node(1)
n3=node(3,n1,n6)
n8=node(8,n3,n10)


x=11
print( BSTA(n8,x) ) #10


















