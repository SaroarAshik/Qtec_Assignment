Selection Sort Function (selectionSort):
1. This function sorts an array of integers in ascending order using the selection sort algorithm.
2. It takes two parameters:
   - arr[]: The array to be sorted.
   - n: The number of elements in the array.
3. The algorithm works by dividing the array into two subarrays: sorted and unsorted.
4. It repeatedly selects the minimum element from the unsorted subarray and moves it to the beginning of the sorted subarray.
5. The outer loop (i) iterates over each element of the array except the last one, defining the boundary of the unsorted subarray.
6. The inner loop (j) finds the index of the minimum element in the unsorted subarray.
7. After finding the minimum element (min_idx), it swaps it with the first element of the unsorted subarray.
8. This process continues until the entire array is sorted in ascending order.


Search Insertion Point Function (searchInsert):
1. This function finds the index where a target number would be inserted into a sorted array.
2. It first sorts the input array using the (selectionSort) function.
3. Then, it performs a linear search to find the insertion point of the target number.
4. It takes three parameters:
   - nums: An array of integers sorted in ascending order.
   - numsSize: The number of elements in the array.
   - target: The target number to be inserted.
5. It returns the index where the target number should be inserted.
6. If the target is greater than all elements in the array, it returns the last index.


Main Function (main):
1. This function contains the test cases to demonstrate the functionality of the (searchInsert) function.
2. Three test cases are provided with different input arrays and target numbers.
3. It calculates the size of each input array using the (sizeof) operator and (sizeof(nums1[0])).
4. It calls the (searchInsert) function for each test case and prints the output.