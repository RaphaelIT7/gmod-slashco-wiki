<function name="WriteOptional" parent="SlashCo" type="libraryfunc">
	<description>
		<note>
			It's **useless** to use this function on a <page>boolean</page> / when using `net.WriteBool` as this will only add overhead.<br>
			**Unless** you want to preserve `nil` values. 
		</note>
		Helper networking function that only writes a value if it isn't `nil`<br>
		The **receiver** code must use <page>SlashCo.ReadOptional</page><br>
	</description>
	<realm>Shared</realm>
	<group>Networking</group>
	<args>
		<arg name="value" type="any"></arg>
		<arg name="writeFunc" type="function"></arg>
		<arg name="optionalArgs" type="any">Any amount of additional arguments</arg>
	</args>
</function>

<example>
	<description>How this function can be used</description>
	<code>
if CLIENT then
	net.Receive("Example", function()
		local value1 = SlashCo.ReadOptional(net.ReadString)
		local value2 = SlashCo.ReadOptional(net.ReadString)

		print("Value1 is " .. tostring(value1))
		print("Value2 is " .. tostring(value2))
	end)
else
	local exampleTable = {
		-- No value1
		value2 = "Hello World"
	}

	util.AddNetworkString("Example")
	net.Start("Example")
		SlashCo.WriteOptional(exampleTable.value1, net.WriteString)
		SlashCo.WriteOptional(exampleTable.value2, net.WriteString)
	net.Broadcast()
end
	</code>
	<output>
Value1 is nil
Value2 is Hello World
	</output>
</example>