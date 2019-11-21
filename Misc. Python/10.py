from random import randint

wrd=input()

for i in range(0, len(wrd)):
    i=randint(0, len(wrd)-2)
    j=randint(i+1, len(wrd)-1)

    wrd=wrd[:i] + wrd[j] + wrd[i+1: j] +wrd[i] + wrd[j+1:]


print(wrd)
    
