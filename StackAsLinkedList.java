public class StackAsLinkedList {
	class StackNode{    
        String data;    
        StackNode next; 
            
        public StackNode(String data){    
            this.data = data;    
            this.next = null;    
        }    
    }   
	
    public StackNode top = null;    
        
	public boolean isEmpty(){
		return top==null;
	}
  
    public void push(String data){
        StackNode newNode = new StackNode(data);
  
        if (isEmpty()){
            top = newNode;
        }
        else{
			newNode.next = top;
            top = newNode;			
        }
        System.out.println(data + " pushed to stack");
    }
  
    public String pop(){
        String popped = "Nothing";
        if (isEmpty()) {
            System.out.println("Stack is Empty");
        }
        else {
            popped = top.data;
            top = top.next;
        }
        return popped;
    }
  
    public String peek(){
        if (isEmpty()){
            System.out.println("Stack is empty");
            return "Nothing";
        }
        else{
            return top.data;
        }
    }
	
	public void display(){
		if (isEmpty()) System.out.println("Stack is empty");
		else{
			StackNode temp = top;
			while(temp != null){
				System.out.print(temp.data + " ");
				temp = temp.next;
			}
			System.out.println();
		}
	}
  
    // Driver code
    public static void main(String[] args){  
        StackAsLinkedList sll = new StackAsLinkedList();
  
		System.out.println(sll.pop() + " popped from stack");  
        System.out.println("Top element is " + sll.peek());
		
        sll.push("D1"); sll.push("D2"); sll.push("D3");
		sll.push("D4"); sll.push("D5"); sll.push("D6");
		sll.push("D7"); sll.push("D8"); sll.push("D9");
 
        System.out.println(sll.pop() + " popped from stack");
		System.out.println(sll.pop() + " popped from stack");		
        System.out.println("Top element is " + sll.peek());
		sll.display();
    }
}