import java.util.linkelList;
import java.util.Iterator;
public class LinkedListExample{

    public static void main(String[] args){

        LinkedList<String> linkedlist = new linkedlist<String>();

        linkedlist.add("php");
        linkedlist.add("os");

        Iterator it = linkedlist.iterator();

        System.out.print("linkedlist element");
        while(it.hasNext()){
            System.out.print(it.Next());
        }




    }
}