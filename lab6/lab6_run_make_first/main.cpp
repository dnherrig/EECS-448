/**
*	@Dylan Herrig
*	@11/1/2017
*	@file main.cpp
*	@brief driver for LinkedList demo
*/
#include <iostream>
#include "LinkedListOfInts.h"
#include "test.h"
#include <algorithm>
#include <vector>
#include <iterator>
#include <iomanip>

int main(int argc, char** argv)
{
	//Example of declaring a LinkedListOfInts
	

	//You won't do all the tests in main; that's what your Test class will be for
	//Example:
	
	TestSuite myTester;
	
	
	myTester.testisEmpty();
	
	myTester.testSize(0);
	
	myTester.printVector(1,1);
	
	myTester.testAddFront();
	
	myTester.testAddBack();
	
	myTester.testisEmpty();
	
	myTester.printVector(1,1);
	
	myTester.printVector(1,1);

	myTester.testRemoveFront();
	
	myTester.testRemoveBack();
	
	myTester.testSearch();





	//std::cout << "Running...\nAnd we're done.\nGoodbye.\n";

	return (0);

}
