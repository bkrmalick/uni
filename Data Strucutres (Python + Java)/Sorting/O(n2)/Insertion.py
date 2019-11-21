def swap(A,i,j):
    tmp=A[i]
    A[i]=A[j]
    A[j]=tmp

def insert(A,i):

    c=i

    while(c>0 and A[c-1]>A[c]):
        swap(A,c-1,c)
        c=c-1
        


    

def insertionSort(A):
    for i in range(0,len(A)):
        insert(A,i)






A=[2,3,1,4]


insertionSort(A)

for n in A:
    print(n,end=',')

        
    


    
