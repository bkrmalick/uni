while(1):
    s=input()

    n=len(s)

    onlyLetters = True
    onlyUpLetters = True
    onlyLwLetters= True
    onlyDigits= True
    onlyDigitsAndLetters= True
    for char in s:
        if not((char>='A' and char<='z')or char=='.'):
            onlyLetters=False

        if not((char>='A' and char<='Z')or char=='.'):
            onlyUpLetters=False

        if not((char>='a' and char<='z')or char=='.'):
            onlyLwLetters=False

        if not((char>='0' and char<='9')or char=='.'):
            onlyDigits=False

        if not((char>='0' and char<='9') or (char>='A' and char<='z')or char=='.'):
            onlyDigitsAndLetters=False

    if(s[0]>='A' and s[0]<='Z'):
        startsUp=True
    else:
        startsUp=False


    if(s[len(s)-1]=='.'):
        period=True
    else:
        period=False


    print(onlyLetters) 
    print(onlyUpLetters) 
    print(onlyLwLetters)
    print(onlyDigits)
    print(onlyDigitsAndLetters)
    print(startsUp)
    print(period)
