class stack{
	int size = 7;
	int top = -1;
	int []A = new int[size];
	
	
	boolean isEmpty(){
		return (top < 0);
	}
	
	boolean isFull(){
		return (top == size -1);
	}
	
	void push(int data)
	{
		if(isFull())
		{
			System.out.println("Stack is full");
		}
		else 
		{
		
			top = top+1;
//		System.out.println(" ;;;"+top);
			A[top]=data;
		}
			
			
	}
	
	int pop()
	{
		int temp = 0;
		if(isEmpty()){
			System.out.println("Stack is empty");
		}
		else {
			A[top] = 0;
			top =top -1;
			
		}
			return top;
			
	}
	int peek()
	{ if (isEmpty()){
		System.out.println("Stack is empty");
	}
	else {
		int x = A[top];
		System.out.println(x);
            return x;
	}
		return top;
	}
	
	void print(){
		
		for(int i=0; i< A.length;i++)
		{
			System.out.print(A[i]+" , ");
		}
		System.out.println();
	}
	
		

	public static void main(String args[])
	{
		stack s1  = new stack();
		System.out.print("Remove an element at the top :  ");
		s1.pop();
		System.out.print("print the top element :  ");
		s1.peek();
		s1.push(10);
		s1.push(20);
		s1.push(30);
		s1.push(40);
		s1.push(50);
		s1.push(60);
		s1.push(70);
		System.out.print("after add the elements at the top :  ");
		s1.peek();
		s1.pop();
		s1.pop();
		System.out.print("after remove two elements at the top :  ");
		s1.peek();
		System.out.print("Display all elements :  ");
		s1.print();
	}
}