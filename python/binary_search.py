"""
Always remember in order for a binary search algorithm to complete the tasks the items in the list need to be sorted.
"""

def binary_search(list, target):
  first = 0
  last = len(list) - 1
  
  while first <= last:
    midpoint = (first + last)//2
    if list[midpoint] == target:
      return midpoint
    elif list[midpoint] < target:
      first = midpoint+1
    else:
      last = midpoint-1
  return -1




def verify(index):
  if index is not -1:
    print("Target found at index: ", index)
  else:
    print("Target not found in list")
    
numbers = [1,2,3,4,5,6,7,8,9,10]

verify(binary_search(numbers, 4))
##verify(result)

##result = binary_search(numbers,6)
##verify(result)