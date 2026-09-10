<function name="ItemValue" parent="Player" type="classfunc">
	<description>
		Returns the value of the given field from one of the player's active effects, or from the item in the primary (or secondary) slot if no active effect defines it.<br>
		Returns `fallback` if neither does. Assumes a survivor-only context and doesn't check the player's team.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="valueName" type="string">Field name to look up on the effect/item table.</arg>
		<arg name="fallback" type="any">Value returned if neither an effect nor the item defines the field.</arg>
		<arg name="isSecondary" type="boolean" optional>If `true`, checks the secondary item slot instead of the primary one.</arg>
	</args>
	<rets>
		<ret name="value" type="any">The resolved value.</ret>
	</rets>
</function>
