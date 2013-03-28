def fib(i)
  if i == 0
    return 0
  end

  if i == 1
    return 1
  end

  fib(i-1) + fib(i-2)

end

start = Time.now
puts fib 32 
puts "%fs" %[Time.now - start]
