#include <stdio.h>
void selectionSort(int arr[], int n) {
    int i, j, min_idx;
    for (i = 0; i < n - 1; i++) {
        min_idx = i;
        for (j = i + 1; j < n; j++) {
            if (arr[j] < arr[min_idx]) {
                min_idx = j;
            }
        }

        int temp = arr[min_idx];
        arr[min_idx] = arr[i];
        arr[i] = temp;
    }
}

int searchInsert(int* nums, int numsSize, int target) {
    selectionSort(nums, numsSize);
    int i;
    for (i = 0; i < numsSize; i++) {
        if (nums[i] >= target) {
            return i;
        }
    }
    return numsSize;
}

int main() {
    // Test case 1
    int nums1[] = {1, 7, 3, 5, 6, 9, 15};
    int target1 = 5;
    int size1 = sizeof(nums1) / sizeof(nums1[0]);
    printf("Output: %d\n", searchInsert(nums1, size1, target1));

    // Test case 2
    int nums2[] = {5, 6, 1, 3};
    int target2 = 2;
    int size2 = sizeof(nums2) / sizeof(nums2[0]);
    printf("Output: %d\n", searchInsert(nums2, size2, target2));

    // Test case 3
    int nums3[] = {1, 3, 5, 6};
    int target3 = 7;
    int size3 = sizeof(nums3) / sizeof(nums3[0]);
    printf("Output: %d\n", searchInsert(nums3, size3, target3));

    return 0;
}
