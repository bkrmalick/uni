def merge(A,n): #O(n3)
    
    B=[] #new merged array
    curr=[] #array for storing current indexes of each row

    for i in range(n): #setting current index of each row to 0 
        curr.append(0)

    for element in range(n*n): #Has runtime O(n2) 
        B.append(chooseNext(curr,A,n)) #Has runtime of O(n+n)
               
    return B

def chooseNext(curr, A,n): #O(n)
    i2=0
    minim=A[i2][curr[i2]]
    
    while(curr[i2]==-1 and i2<n):
        i2=i2+1
        minim=A[i2][curr[i2]]
    
    for i in range(0,n): #for finding minimum value at current indexes
        if(A[i][curr[i]]<minim and curr[i]!=-1):
            minim=A[i][curr[i]]
            i2=i

    if(curr[i2]+1<n): #Incrementing current index
        curr[i2]=curr[i2]+1
    else:
        curr[i2]=-1

    return minim



#---------main---------
A=[[1,3,5],
   [1,2,6],
   [4,7,8]]


B=merge(A,3)


for i in range(len(B)):
     print(B[i], end=',') # 1,1,2,3,4,5,6,7,8,






     
