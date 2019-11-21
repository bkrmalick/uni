
def CheckSub(B,A): #B is subarray to be checked
    for i in range(len(B)):
        if(B[i]!=A[i]):
            return False

    return True


A=[1,2,3,4,5]
B=[1,2,4]

print(CheckSub(B,A))
