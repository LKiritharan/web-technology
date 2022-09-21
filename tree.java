public class tree{
	Object[] array;
	
	public tree(){
		array = new Object[128];
	}
	
	public boolean empty(){
		return (array[1]==null);
		
	}
	
	public int left(int i){
		return 2*i;
	}
	public int right(int i){
		return  2*i+1;
	}
	public int parent(int i){
		return i/2;
	}
	public Object getData(int i){
		if(i<0||i>=array.length) return null;
		return array[i];
	}
	
	public void setData(int i,Object obj){
		if(i<1|| i>= array.length)
		return;
		array[i]=obj;
	}
	
	public void printPreorder(int i){
		if(getData(i)==null) return;
		System.out.print(getData(i)+ " ,  ");
		printPreorder(left(i));
		printPreorder(right(i));
	}
	
	public void printPostorder(int i){
		if(getData(i)==null) return;
		printPostorder(left(i));
		printPostorder(right(i));
		System.out.print(getData(i)+ " ,  ");
		
	}
	public void printInorder(int i){
		if(getData(i)==null) return;
		printInorder(left(i));
		System.out.print(getData(i)+" , ");
		printInorder(right(i));
	}
	
	public static void main(String args[]){
		/*tree t1 = new tree();
		int root = 1;
		t1.setData(root ,"root");
		t1.setData(t1.left(root) ,"left");
		t1.setData(t1.right(root) ,"right");
		t1.printPostorder(root);
		System.out.println("  ");
		System.out.println("------------------------------------------------------");
		t1.printPreorder(root);
		System.out.println("  ");
		System.out.println("------------------------------------------------------");
		t1.printInorder(root);
		System.out.println("  ");
		System.out.println("  */
		
		tree t2 = new tree();
		int root =1;
		t2.setData(root,"A");
		t2.setData(t2.left(root),"B");
		t2.setData(t2.right(root),"C");
		t2.setData(t2.left(2),"D");
		t2.setData(t2.right(4),"H");
		t2.setData(t2.right(9),"M");
		t2.setData(t2.left(9),"L");
		t2.setData(t2.left(4),"G");
		t2.setData(t2.left(8),"K");
		t2.printInorder(root);
		System.out.println("");
		System.out.println("");
		t2.printPostorder(root);
		System.out.println("");
		System.out.println("");
		t2.printPreorder(root);
	}
}