def subarray(subarray, array):
    for i in range(0,len(subarray)):
        found=False
        for j in range(0, len(array)):
            if(B[i]==A[j]):
                found=True
                break
        if(found==False):
            return False
                       
    return True

A=[4,2,1,3,5]
B=[5,9,1]

print(subarray(B, A))
