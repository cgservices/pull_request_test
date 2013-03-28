start = Time.now

sum = 0
i = 0
while i < 1000000 do
  sum += i
  i += 1
end

puts sum

puts "%fs" %[Time.now - start]
