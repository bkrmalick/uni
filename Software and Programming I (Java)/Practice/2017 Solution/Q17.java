public class Q17 {
private static int p;
public Q17() {
}
public void main(String[] args) {
boolean found = false;
int i = p;
while (!found && i < args.length) {
if (args[i].equals( "--help")) {
found = true;
}
i += 2;
}
if (i==p)
System.out.println("HELP " + i);
}
}