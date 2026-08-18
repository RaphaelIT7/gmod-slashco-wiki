<function name="IsDoorOpen" parent="SlashCo" type="libraryfunc">
	<description>
		Returns whether the door is open or not
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="ent" type="Entity">The Entity to check (If it's not a door, then `false` will be returned)</arg>
	</args>
	<rets>
		<ret name="isOpen" type="boolean">Returns `true` if the door is open, else returns `false`</ret>
	</rets>
</function>