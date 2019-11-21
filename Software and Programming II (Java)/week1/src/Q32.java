public class Q32 {

    public static void main(String[] args)
    {
        double length=3.4;
        double width=8.4;

        System.out.println("Length: "+length);
        System.out.println("Width: "+width);
        System.out.println("\nLength: "+areaOfRectangle(length,width));

    }

    /**
     * calculates the area of a rectangle
     * @param l
     * @param w
     * @return the product of l and w
     */
    private static double areaOfRectangle(double l, double w)
    {
        return l*w;
    }
}
