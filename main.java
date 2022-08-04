class stack{
	int size = 5 ;
	int top = -1;
	int []A =new int[size];
	
	
	
	boolean isEmpty(){
		return (top <0);
	}
	
	boolean isFull(){
		 return (top==size-1);
		
	}
	void push(int data)
	{	
		if(isFull())
		{
			System.out.println("a");
		}
		
		top = top +1;
		A[top] = data;

		
	}
	
	
	 int pop()
	 {  int data = 0;
		 if(isEmpty())
		 {
			 System.out.println("b");
		 }
		 A[top] = 0;
		 top = top -1;
		 return data;
		 
	}
	void print()
	{
		for(int i =0;i<A.length;i++)
		{
			System.out.print(A[i] +" , ");
		}
	}
	
	
}
class main{
	public static void main(String[] args){
		stack s = new stack();
		s.push(2);
		s.push(4);
		s.push(5);
		s.push(8);
		s.push(9);
		s.print();
	}
	
}
