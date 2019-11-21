
def mergeSort(A):
    if(len(A)>1):
        sFlag=True

        for i in range(0,len(A)-1):
            if(A[i]>A[i+1]):
                sFlag=False

                
        if(sFlag==False):
            
            m=int((len(A))/2)

            r=A[:m]
            l=A[m:]

            mergeSort(r)
            mergeSort(l)
            
            cr=0
            cl=0
            C=[]
            
            for i in range(0,len(r)+len(l)):
                if(cr>=len(r)):
                    x=l[cl]
                    cl=cl+1
                elif(cl>=len(l)):
                    x=r[cr]
                    cr=cr+1
                else:
                    if(l[cl]<r[cr]):
                        x=l[cl]
                        cl=cl+1
                    else:
                        x=r[cr]
                        cr=cr+1

                
                C.append(x)

            
            for i in range(0,len(C)):
                A[i]=C[i]

A=[1,3,23,5,6,8]

mergeSort(A)

for i in A:
    print(i, end=',')
    
    
