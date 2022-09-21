class Stack {
    static final int size = 5;
    int top;
    int sArray[] = new int[size]; // Maximum size of Stack
  
	Stack() {
        top = -1;
    }
	
    boolean isEmpty() {
        return (top < 0);
    }
	
	boolean isFull() {
        return (top == size-1);
    }
      
    void push(int data) {
        if (isFull()) {
            System.out.println("Stack Overflow");
        }
        else {
            sArray[++top] = data;
            System.out.println(data + " pushed into stack");
        }
    }
  
    int pop() {
        if (isEmpty()) {
            System.out.println("Stack Underflow");
            return 0;
        }
        else {
            return sArray[top--];
        }
    }
  
    int peek() {
        if (isEmpty()) {
            System.out.println("Stack Underflow");
            return 0;
        }
        else {
            return sArray[top];
        }
    }
     
    void print(){
		for(int i = top;i>-1;i--){
			System.out.print(" "+ sArray[i]);
		}
	}
}
  
// Driver code
class StackAsArray {
    public static void main(String args[])
    {
        Stack s = new Stack();
        s.push(10);
        s.push(20);
        s.push(30);
		s.push(40);
		s.push(50);
        System.out.println(s.pop() + " Popped from stack");
        System.out.println("Top element is :" + s.peek());
        System.out.print("Elements present in stack :");
        s.print();
    }
}

