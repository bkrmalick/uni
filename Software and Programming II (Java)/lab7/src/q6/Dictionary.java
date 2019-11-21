package q6;

import java.util.ArrayList;
import java.util.Collection;

public interface Dictionary<key,val>
{
    val get(key k);
    key put (val v);
    void put(val v, key k);
    boolean isEmpty();
    Collection<key> keys();
    Collection<val> values();
}
