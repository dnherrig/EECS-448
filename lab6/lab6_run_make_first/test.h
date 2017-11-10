/* -----------------------------------------------------------------------------
 *
 *File Name: test.h
	Author: Dylan Herrig
  KUID: 2837256
	Email Address: dylan.herrig@gmail.com
	Last Changed: 11/1/17
 *
 ---------------------------------------------------------------------------- */

#ifndef TEST_H
#define TEST_H
#include <string>
#include <iostream>
#include <iostream>
#include "LinkedListOfInts.h"
#include "test.h"
#include <algorithm>
#include <vector>
#include <iterator>
#include <iomanip>

class TestSuite
{
	private:


	public:
		LinkedListOfInts testableList;
		std::vector<int> printToVector = testableList.toVector();
		bool printVector(int val, int loc);
		int updateToVector();

		
		bool testisEmpty();
		void testAddFront();
		void testAddBack();
		void testRemoveBack();
		void testRemoveBack1();
		void testRemoveFront();
		void testSearch();
		int testSize(int ctrl);


};

#endif
