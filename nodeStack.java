class nodeStack{
	class Node{
		String data;
		Node next;
		
		Node(String data){
			this.data = data;
			this.next = null;
		}
		
	}
	Node top;
	boolean isEmpty(){
		return top == null;
	}
	
	void push(String data)
	{
		Node newNode = new Node(data);
		if(isEmpty())
		{
			top = newNode;
		}
		else{
			newNode.next = top;
			top = newNode;
		}
	}
	
	void pop()
	{
		if(isEmpty())
		{
			System.out.println("Stack is Empty");
		}
		else{
			Node temp;
		temp = top;
		top = top.next;
		}
		
	}
	
	void peek()
	{
		if(isEmpty())
		{
			System.out.println("Stack is Empty");
		}
		else{
			Node temp;
		temp = top;
		System.out.println(top.data);
		}
		
	}
	void print(){
		Node current = top ;
		if(top == null)
		{
			System.out.println("Stack is Empty !!!");
		}
		while(current != null)
		{
			System.out.print(current.data + " ");
			current = current.next;
		}
		System.out.println();
	}
	
	
	public static void main(String args[])
	{
		nodeStack ns1 = new nodeStack();
		ns1.pop();
		System.out.println("Remove an element at the top :  ");
		ns1.print();
		System.out.print("print the top element :  ");
		ns1.peek();
		ns1.push("D1");
		ns1.push("D2");
		ns1.push("D3");
		ns1.push("D4");
		ns1.push("D5");
		ns1.push("D6");
		ns1.push("D7");
		
		System.out.print("after add the elements at the top :  ");
		ns1.peek();
		ns1.pop();
		ns1.pop();
		System.out.print("after remove two elements at the top :  ");
		ns1.peek();
		System.out.print("Display all elements :  ");
		ns1.print();
	}

}