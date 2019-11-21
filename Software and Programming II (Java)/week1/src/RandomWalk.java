import java.util.Random;

public class RandomWalk {
    private int x = 0;
    private int y = 0;
    private Random rand = new Random();

    public static void main(String[] args) {
        new RandomWalk().run();
    }

    public void run() {
        double distance = 0;
        while (distance < 10) {
            step(3);
            System.out.println("Now at " + x + ", " + y);
            distance = getDistance();
        }
    }

    private void step(int maxStep) {
        x += centreAtZero(maxStep);
        y += centreAtZero(maxStep);
    }

    private int centreAtZero(int maxStep) {
        int r = rand.nextInt(2 * maxStep + 1);
        return r - maxStep;
    }

    private double getDistance() {
        return Math.sqrt(x * x + y * y);
    }
}
