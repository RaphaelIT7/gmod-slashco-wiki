<function name="AddSlasherClass" parent="SlashCo" type="libraryfunc">
	<description>
		Registers or overrides a slasher class.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="slasherClass" type="SlasherClass">The table containing the slasher class data</arg>
		<arg name="id" type="number" default="nil">
			The id to force for setting.<br>
			**Be careful when using this** as you could always override an existing slasher class!
		</arg>
	</args>
</function>

<example>
	<code>
SlashCo.AddSlasherClass({
	Name = "Humanoid"
})

-- Now like normal, you can do this in a slasher
SLASHER.Class = SlashCo.SlasherClass.Humanoid

-- Names are double linked, so to get the name of a danger level number you can do
print( SlashCo.SlasherClass[ SLASHER.Class ] )
	</code>
</example>