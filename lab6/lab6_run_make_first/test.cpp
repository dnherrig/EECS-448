/**
*	@Dylan Herrig
*	@11/2/2017
*	@file test.cpp
*	@brief driver for LinkedList demo
*/
#include "test.h"
#include <iostream>
#include <string>


int TestSuite::updateToVector()
{
	printToVector = testableList.toVector();
	int size = printToVector.size();
	return(size);
}

bool TestSuite::printVector(int val, int loc)
{
	//std::vector<int> printVector = testableList.toVector();
	//int size = printVector.size();
	//int loc = 0;
	
	int size = updateToVector();
	
	//std::cout << printVector.size();
	
	if (size == 0)
	{
		//std::cout << "No values in the list!\n";
	}
	else
	{
		for(int i = 0; i < size; i++)
		{
			//std::cout << "Value at index " << i << " is: "; 
			//std::cout << printToVector[i];
			//std::cout << "\n";
			
		}
		
		if(val == printToVector[loc])
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
}

bool TestSuite::testisEmpty()
{
	
	if(testableList.isEmpty())
	{
		if (testSize(1) == 0)
		{
			std::cout << "Test 1, .isEmpty returns true if the the list is empty: Passed \n";
		}
		else
		{
			std::cout << "Test 5, .isEmpty returns false if the the list is empty: Failed \n";
		}
		//std::cout << "List is empty\n";
		return true;
	}
	else
	{
		
		//std::cout << "This list has things in it!\n";
		return false;
	}
}

void TestSuite::testAddFront()
{
	testableList.addFront(1);
	testableList.addFront(2);
	testableList.addFront(3);
	testableList.addFront(4);

	std::cout << "Test 3, .addFront adds to the front of the list:";

	if(printVector(4,0))
	{
		if(printVector(3,1))
		{
			if(printVector(2,2))
			{
				if(printVector(1,3))
				{
					std::cout << "Passed\n";
				}
				else
				{
					std::cout << "Failed\n";
				}
			}
			else
			{
				std::cout << "Failed\n";
			}
		}
		else
		{
			std::cout << "Failed\n";
		}
	}
	else
	{
		std::cout << "Failed\n";
	}

}


void TestSuite::testAddBack()
{
	testableList.addBack(5);
	testableList.addBack(6);
	testableList.addBack(7);
	testableList.addBack(8);
	//testable

	std::cout << "Test 4, .addBack adds to the back of the list:";

	if(printVector(5,4))
	{
		if(printVector(6,5))
		{
			if(printVector(7,6))
			{
				if(printVector(8,7))
				{
					std::cout << "Passed\n";
				}
				else
				{
					std::cout << "Failed\n";
				}
			}
			else
			{
				std::cout << "Failed\n";
			}
		}
		else
		{
			std::cout << "Failed\n";
		}
	}
	else
	{
		std::cout << "Failed\n";
	}

}


void TestSuite::testRemoveBack1()
{
	//std::vector<int> testRemoveBackVector = testableList.toVector();
	int sizeOfList = printToVector.size();
	
	int lastValue = printToVector[sizeOfList-1];
	
	std::cout << lastValue;
	
	//testRemoveBackVector = testableList.toVector();
	//sizeOfList = testRemoveBackVector.size();
	
	//sizeOfList = updateToVector();
	
	testableList.removeBack();
	
	//lastValue = printToVector[sizeOfList-1];
	std::cout << lastValue;
}


int TestSuite::testSize(int ctrl)
{
	//std::cout << "this is the size of the list: ";
	//std::cout << testableList.size() << "\n";
	
	//std::vector<int> sizeTestVector = testableList.toVector();
	int size = printToVector.size();
	
	size = updateToVector();
	
	if(ctrl != 1)
	{
		if(size == testableList.size())
		{
			std::cout << "Test 2, .size function returns the length of the list: Passed \n";
		}
		else
		{
			std::cout << "Test 2, .size function returns the length of the list: Failed \n";
		}
	}
	else
	{
		return(testableList.size());
	}

}


void TestSuite::testRemoveFront()
{
	LinkedListOfInts vector1;
	
	vector1.addFront(1);
	
	std::vector<int> Vector1 = vector1.toVector();
	
	//std::cout << Vector1[0];
	//std::cout << "\n";
	
	
	if(vector1.removeFront())
	{
		std::cout << "Test 6, .removeFront returns true if something is removed: Passed \n";
	}
	else
	{
		std::cout << "Test 6, .removeFront returns false if nothing is removed: Passed \n";
	}
	
	Vector1 = vector1.toVector();
	
	//std::cout << Vector1[0];
	//std::cout << "\n";
	
	if(Vector1[0] == 1)
	{
		std::cout << "Test 7, .removeFront removes the first character in the list: Failed \n";
	}
	else 
	{
		std::cout << "Test 7, .removeFront removes the first character in the list: Passed \n";
	}
	
	
	
	

	


}

void TestSuite::testRemoveBack()
{
	LinkedListOfInts vector2;
	
	vector2.addFront(2);
	
	std::vector<int> Vector2 = vector2.toVector();
	
	//std::cout << Vector2[0];
	//std::cout << "\n";
	

	
	
	if(vector2.removeBack())
	{
		std::cout << "Test 8, .removeBack returns true if something is removed: Passed \n";
	}
	else
	{
		std::cout << "Test 8, .removeBack returns false if nothing is removed: Passed \n";
	}
	
	Vector2 = vector2.toVector();
	
	//std::cout << Vector2[0];
	//std::cout << "\n";
	
	if(Vector2[0] == 2)
	{
		std::cout << "Test 9, .removeBack removes the last character in the list: Failed \n";
	}
	else 
	{
		std::cout << "Test 9, .removeBack removes the last character in the list: Passed \n";
	}

}

void TestSuite::testSearch()
{
	LinkedListOfInts vector3;
	
	vector3.addFront(5);
	vector3.addFront(4);
	vector3.addFront(3);
	vector3.addFront(2);
	vector3.addFront(1);

	
	//std::vector<int> Vector2 = vector2.toVector();
	
	
	if(vector3.search(3))
	{
		std::cout << "Test 10, .search returns true if value is found: Passed \n";
	}
	else
	{
		std::cout << "Test 10, .search returns true if value is not found: Failed \n";
	}
	
	if(vector3.search(8))
	{
		std::cout << "Test 11, .search returns false if value is not found: Failed \n";
	}
	else
	{
		std::cout << "Test 11, .search returns false if value is not found: Passed \n";
	}
	

}