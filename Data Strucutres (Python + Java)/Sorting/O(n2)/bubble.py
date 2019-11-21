def swap(A,i,j):
    tmp=A[i]
    A[i]=A[j]
    A[j]=tmp


def changeNeighbours(A):

    flag=False
    for i in range(0,len(A)-1):
        if(A[i]>A[i+1]):
            swap(A,i,i+1)
            flag=True

    return flag



def bubbleSort(A):
    c=0
    while(changeNeighbours(A) and c<len(A)-1):
        c=c+1



A=[2,3,1,4]


bubbleSort(A)

for n in A:
    print(n,end=',')
