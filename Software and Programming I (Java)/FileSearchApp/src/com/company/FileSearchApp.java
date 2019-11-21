package com.company;

public class FileSearchApp {

    private String path;
    private String regex;
    private String zipFileName;


    public static void main(String[] args)
    {
        FileSearchApp app = new FileSearchApp();


        switch( Math.min(args.length,3) )
        {
            case 0:
                System.out.println("Usage: FileSearchApp path [regex] [zipfile]");
                return;
            case 3:
                app.setZipFileName(args[2]);
            case 2:
                app.setRegex(args[1]);
            case 1:
                app.setPath(args[0]);


            try
            {
             //  app.walkDirectory(app.getPath());
            }
            catch (Exception e)
            {
                e.printStackTrace();
            }


        }

    }

    public void setPath(String path)
    {
        this.path=path;
    }

    public void setZipFileName(String zipFileName)
    {
        this.zipFileName=zipFileName;
    }
    public void setRegex(String regex)
    {
        this.regex=regex;
    }

    public String getPath()
    {
        return path;
    }

    public String getRegex()
    {
        return regex;
    }

    public String getZipFileName()
    {
        return zipFileName;
    }

}
