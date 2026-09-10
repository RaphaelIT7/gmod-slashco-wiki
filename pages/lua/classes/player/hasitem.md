<function name="HasItem" parent="Player" type="classfunc">
	<description>
		Returns whether the player has the given item equipped in the primary (or secondary) slot.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="item" type="string">Name of the item to check for.</arg>
		<arg name="isSecondary" type="boolean" optional>If `true`, checks the secondary slot instead of the primary one.</arg>
	</args>
	<rets>
		<ret name="hasItem" type="boolean">`true` if the player has that item equipped.</ret>
	</rets>
</function>
