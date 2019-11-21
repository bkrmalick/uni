
def merge(R,A,B,st):
    ca=0
    cb=0
    #C=[]
    for i in range(0,len(A)+len(B)):
        if(ca>=len(A)):
            x=B[cb]
            cb+=1
        elif(cb>=len(B)):
            x=A[ca]
            ca+=1
        else:
            if(A[ca]<B[cb]):
                x=A[ca]
                ca+=1
            else:
                x=B[cb]
                cb+=1

        R[st+i]=x

    
                

def mergeSort(A):
    if(len(A)>1):

        sz=1

        while(sz<len(A)):

            i=0
            while(i<len(A)):
                
                r=A[i:i+sz]
                l=A[i+sz:i+sz+sz]

                merge(A,r,l,i)
                
                i=i+sz
            
            sz=sz*2

    
A=[1,3,23,5,6,8]

mergeSort(A)
#A=[1,2,3]
#B=[4,5,6]

#C=merge(A,B)
for i in A:
    print(i, end=',')
    
    
