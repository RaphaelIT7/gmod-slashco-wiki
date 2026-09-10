<function name="SlasherValue" parent="Player" type="classfunc">
	<description>
		Returns a value from the player's current <page>SlasherClass</page> table.<br>
		Assumes the player is on the slasher team; no team check is performed.<br>
		If the player's slasher doesn't provide the value, the fallback is returned.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
	<args>
		<arg name="value" type="string">Name of the slasher table field to retrieve</arg>
		<arg name="fallback" type="any" optional>Value to return when the slasher table doesn't provide the requested field</arg>
	</args>
	<rets>
		<ret name="value" type="any">Value from the slasher table, or the fallback value</ret>
	</rets>
</function>
