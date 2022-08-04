class nodeStack{
	class Node{
		int data;
		Node next;
	
	public Node(int data)
	{
		this.data = data;
		this.next = null;
	}
	}
	Node top;
	boolean  isEmpty()
	{
		return top == null;
	}
	
	void push(int data)
	{   Node newNode = new Node(data);
		if(isEmpty())
		{top = newNode;}
	 else 
	 {
		newNode.next =  top;
		top = newNode;
	 }
		
		
		
	}
	void pop(){
		if(isEmpty()){
			System.out.println("Stack is empty!! Deletion is not possible !!!");
			
		}
		
		
			Node temp;
			temp = top;
			top = top.next;
			
			
		
		
		
	}
	void print(){
		Node current = top;
		if(top == null){
			System.out.println("List is empty");
		}
		while(current!= null){
			System.out.print(current.data+" ");
			current = current.next;
		}
		System.out.println();
	}
	
	
	
	public static void main(String args[])
	{
		nodeStack n = new nodeStack();
		n.push("D1");
		n.push("D2");
		n.pop();
		n.push("D3");
		n.push("D4");
	n.pop();
		n.print();
	}
}
