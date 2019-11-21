
while(1):
    wrd=input()

    onlyLetters=True
    onlyUP=True
    onlyDwn=True
    onlyDigits=True

    letters=False
    digits=False

    startUp=False
    period=False

    count=0

    while(count<len(wrd)):

        
        if (not(wrd[count]>='A' and wrd[count]<= 'z')) and wrd[count]!='.':
            onlyLetters=False

        if (not(wrd[count]>='A' and wrd[count]<= 'Z')) and wrd[count]!='.':
            onlyUP=False

        if (not(wrd[count]>='a' and wrd[count]<= 'z')) and wrd[count]!='.':
            onlyDwn=False

        if (not(wrd[count]>='0' and wrd[count]<= '9')) and wrd[count]!='.':
            onlyDigits=False

        if (wrd[count]>='A' and wrd[count]<= 'z'):
            letters=True

        if (wrd[count]>='0' and wrd[count]<= '9'):
            digits=True
        count=count+1

    if(wrd[0]>='A' and wrd[0]<='Z'):
        startUp=True

    if(wrd[len(wrd)-1]=='.'):
        period=True

    print(wrd[len(wrd)-1])
    print('contains only letters: ', onlyLetters)
    print('contains only uppercase: ', onlyUP)
    print('contains only downcase : ', onlyDwn)
    print('contains only digits: ', onlyDigits)
    print('starts with uppercase: ', startUp)
    print('ends with period: ', period)
    

    

   
