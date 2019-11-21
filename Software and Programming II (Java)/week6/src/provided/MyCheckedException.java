package provided;
public class MyCheckedException extends Exception {
    public MyCheckedException() {
        super();
    }

    public MyCheckedException(String reason) {
        super(reason);
    }
}
