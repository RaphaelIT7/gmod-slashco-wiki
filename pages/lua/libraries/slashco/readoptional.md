<function name="ReadOptional" parent="SlashCo" type="libraryfunc">
	<description>
		<note>
			It's **useless** to use this function on a <page>boolean</page> / when using `net.WriteBool` as this will only add overhead.<br>
			**Unless** you want to preserve `nil` values. 
		</note>
		Helper networking function that only writes a value if it isn't `nil`<br>
		The **sender** code must use <page>SlashCo.WriteOptional</page><br>
		You can find a example on <page>SlashCo.WriteOptional</page><br>
	</description>
	<realm>Shared</realm>
	<group>Networking</group>
	<args>
		<arg name="readFunc" type="function"></arg>
		<arg name="optionalArgs" type="any">Any amount of additional arguments</arg>
	</args>
	<rets>
		<ret name="value" type="any">The received value</ret>
	<rets>
</function>