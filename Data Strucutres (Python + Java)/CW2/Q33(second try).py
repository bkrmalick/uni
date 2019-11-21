
def CheckSub(B,A): #B is subarray to be checked

    cA=0
    cB=0
    flag=True
    while(cA<len(A)):
        if(A[cA]==B[cB]):
            cA=cA+1
            cB=cB+1
        else:
            if(cA+1>=len(A)):
                flag=False
            cA=cA+1

    return flag


A=[1,2,3,4,5]
B=[2,4,69]

print(CheckSub(B,A))
