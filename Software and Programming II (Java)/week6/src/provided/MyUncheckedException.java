package provided;
public class MyUncheckedException extends RuntimeException {
    public MyUncheckedException() {
        super();
    }

    public MyUncheckedException(String reason) {
        super(reason);
    }
}
